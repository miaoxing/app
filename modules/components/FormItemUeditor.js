import React from 'react';
import FormItem from "components/FormItem";
import {connect} from "formik";
import rp from 'require-promise';

const loader = rp('ueditor');

class FormItemUeditor extends React.Component {
  componentDidMount() {
    loader.then(() => {
      const editor = UE.getEditor(this.props.name);
      editor.addListener('contentChange', () => {
        this.props.formik.setFieldValue(this.props.name, editor.getContent());
      });
    });
  }

  render() {
    const {...rest} = this.props;

    return <FormItem component="textarea" controlSize={6} bsClass="" {...rest}/>;
  }
}

export default connect(FormItemUeditor);
