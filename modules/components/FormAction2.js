import React from 'react';
import {FormGroup, Button, Col} from 'react-bootstrap';
import BtnLink from "components/BtnLink";

function FormAction2({url}) {
  if (!url) {
    url = window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/'));
  }

  return (
    <FormGroup className="clearfix form-actions">
      <Col smOffset={2}>
        <Button bsStyle="primary" type="submit">
          <i className="fa fa-check bigger-110"/>
          {' '}提交
        </Button>
        &nbsp; &nbsp; &nbsp;
        <BtnLink to={url}>
          <i className="fa fa-undo bigger-110"/>
          {' '}返回列表
        </BtnLink>
      </Col>
    </FormGroup>
  );
}

export default FormAction2
