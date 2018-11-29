// From https://github.com/ant-design/ant-design/blob/master/components/modal

import React from "react";
import ReactDOM from 'react-dom';
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
      <Button className={'text-' + type} onClick={this.onClick} loading={loading} {...buttonProps}>
        {children}
      </Button>
    );
  }
}

const ConfirmDialog = (props) => {
  const {
    onCancel,
    onOk,
    close,
    afterClose,
    visible,
    centered = true,
    okButtonProps,
    cancelButtonProps,
    okType = 'primary',
    okText = '确认',
    cancelText = '取消',
    okCancel = true,
    autoFocusButton = 'ok',
    ...rest
  } = props;

  const cancelButton = okCancel && (
    <ActionButton type="dark" actionFn={onCancel} closeModal={close}
      autoFocus={autoFocusButton === 'cancel'}
      buttonProps={cancelButtonProps}>
      {cancelText}
    </ActionButton>
  );

  return (
    <Modal
      show={visible}
      backdrop="static"
      centered={centered}
      autoFocus={false}
      className="modal-prompt modal-zoom"
      {...rest}
    >
      <Modal.Body>{props.content}</Modal.Body>
      <Modal.Footer className="border-top">
        {cancelButton}
        <ActionButton type={okType} actionFn={onOk} closeModal={close} autoFocus={autoFocusButton === 'ok'}
          buttonProps={okButtonProps}>
          {okText}
        </ActionButton>
      </Modal.Footer>
    </Modal>

    /*<Dialog
      onCancel={close.bind(this, { triggerCancel: true })}
      afterClose={afterClose}
    >
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
