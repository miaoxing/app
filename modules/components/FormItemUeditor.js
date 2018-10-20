import React from 'react';
import FormItem from "components/FormItem";
import {connect} from "formik";
import rp from 'require-promise';

const loader = rp('ueditor');

class FormItemUeditor extends React.Component {
  editor;

  componentDidMount() {
    loader.then(() => {
      this.editor = UE.getEditor(this.props.name);
      this.editor.addListener('contentChange', () => {
        this.props.formik.setFieldValue(this.props.name, this.editor.getContent());
      });
    });
  }

  componentWillUnmount() {
    if (this.editor) {
      this.editor.destroy();
    }
  }

  render() {
    const {...rest} = this.props;

    return <FormItem component="textarea" controlSize={6} bsClass="" {...rest}/>;
  }
}

export default connect(FormItemUeditor);
