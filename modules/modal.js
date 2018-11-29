// From https://github.com/ant-design/ant-design/blob/master/components/modal

import React from "react";
import ReactDOM from 'react-dom';
// import ActionButton from './ActionButton';
import {Button, Modal} from "react-bootstrap4";

var IS_REACT_16 = !!ReactDOM.createPortal;

const ConfirmDialog = (props) => {
  const {onCancel, onOk, close, afterClose, visible, keyboard, centered = true, okButtonProps, cancelButtonProps} = props;
  const okType = props.okType || 'primary';
  // 默认为 true，保持向下兼容
  const okCancel = ('okCancel' in props) ? !props.okCancel : true;
  // 默认为 false，保持旧版默认行为
  const maskClosable = props.maskClosable === undefined ? false : props.maskClosable;
  const okText = props.okText || '确认';
  const cancelText = props.cancelText || '取消';
  const autoFocusButton = props.autoFocusButton === null ? false : props.autoFocusButton || 'ok';

  const cancelButton = okCancel && (
    <Button actionFn={onCancel} closeModal={close} autoFocus={autoFocusButton === 'cancel'}
      buttonProps={cancelButtonProps}>
      {cancelText}
    </Button>
  );

  return (
    <Modal
      show={visible}
      backdrop="static"
      centered={centered}
      keyboard={keyboard}
      className="modal-prompt modal-zoom"
    >
      <Modal.Body>{props.content}</Modal.Body>
      <Modal.Footer className="border-top">
        <Button className="border-right text-dark">
          取消
        </Button>
        <Button className="text-primary">
          确认
        </Button>
      </Modal.Footer>
    </Modal>

    /*<Dialog
      className={classString}
      wrapClassName={classNames({ [`${contentPrefixCls}-centered`]: !!props.centered })}
      onCancel={close.bind(this, { triggerCancel: true })}
      title=""
      transitionName="zoom"
      footer=""
      maskTransitionName="fade"
      maskClosable={maskClosable}
      afterClose={afterClose}
    >
      <div className={`${contentPrefixCls}-body-wrapper`}>
        <div className={`${contentPrefixCls}-body`}>
          <span className={`${contentPrefixCls}-title`}>{props.title}</span>
          <div className={`${contentPrefixCls}-content`}>{props.content}</div>
        </div>
        <div className={`${contentPrefixCls}-btns`}>
          {cancelButton}
          <ActionButton type={okType} actionFn={onOk} closeModal={close} autoFocus={autoFocusButton === 'ok'} buttonProps={okButtonProps}>
            {okText}
          </ActionButton>
        </div>
      </div>
    </Dialog>*/
  );
};

export default function confirm(config) {
  var div = document.createElement('div');
  document.body.appendChild(div);

  let currentConfig = {...config, close, visible: true};

  function close(...args) {
    currentConfig = {
      ...currentConfig,
      visible: false,
      afterClose: destroy.bind(this, ...args),
    };
    if (IS_REACT_16) {
      render(currentConfig);
    } else {
      destroy(...args);
    }
  }

  function update(newConfig) {
    currentConfig = {
      ...currentConfig,
      ...newConfig,
    };
    render(currentConfig);
  }

  function destroy(...args) {
    const unmountResult = ReactDOM.unmountComponentAtNode(div);
    if (unmountResult && div.parentNode) {
      div.parentNode.removeChild(div);
    }
    const triggerCancel = args && args.length &&
      args.some(param => param && param.triggerCancel);
    if (config.onCancel && triggerCancel) {
      config.onCancel(...args);
    }
  }

  function render(props) {
    ReactDOM.render(<ConfirmDialog {...props} />, div);
  }

  render(currentConfig);
  return {
    destroy: close,
    update,
  };
}
