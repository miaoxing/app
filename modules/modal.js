// From https://github.com/ant-design/ant-design/blob/master/components/modal

import React from "react";
import ReactDOM from 'react-dom';
// import ActionButton from './ActionButton';
import {Button, Modal} from "react-bootstrap4";

var IS_REACT_16 = !!ReactDOM.createPortal;

class ActionButton extends React.Component {
  timeoutId;

  constructor(props) {
    super(props);
    this.state = {
      loading: false,
    };
  }

  componentDidMount() {
    if (this.props.autoFocus) {
      const $this = ReactDOM.findDOMNode(this);
      this.timeoutId = setTimeout(() => $this.focus());
    }
  }

  componentWillUnmount() {
    clearTimeout(this.timeoutId);
  }

  onClick = () => {
    const {actionFn, closeModal} = this.props;
    if (actionFn) {
      let ret;
      if (actionFn.length) {
        ret = actionFn(closeModal);
      } else {
        ret = actionFn();
        if (!ret) {
          closeModal();
        }
      }
      if (ret && ret.then) {
        this.setState({loading: true});
        ret.then((...args) => {
          // It's unnecessary to set loading=false, for the Modal will be unmounted after close.
          // this.setState({ loading: false });
          closeModal(...args);
        }, () => {
          // See: https://github.com/ant-design/ant-design/issues/6183
          this.setState({loading: false});
        });
      }
    } else {
      closeModal();
    }
  };

  render() {
    const {type, children, buttonProps} = this.props;
    const loading = this.state.loading;
    return (
      <Button variant={type} onClick={this.onClick} loading={loading} {...buttonProps}>
        {children}
      </Button>
    );
  }
}

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
    <ActionButton actionFn={onCancel} closeModal={close} autoFocus={autoFocusButton === 'cancel'}
      buttonProps={cancelButtonProps}>
      {cancelText}
    </ActionButton>
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
        {cancelButton}
        <ActionButton type={okType} actionFn={onOk} closeModal={close} autoFocus={autoFocusButton === 'ok'}
          buttonProps={okButtonProps}>
          {okText}
        </ActionButton>
        {/*<Button className="border-right text-dark">*/}
          {/*取消*/}
        {/*</Button>*/}
        {/*<Button className="text-primary">*/}
          {/*确认*/}
        {/*</Button>*/}
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
