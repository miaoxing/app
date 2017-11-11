import React from 'react';
import {FormGroup, Button, Col} from 'react-bootstrap';

function FormAction({url}) {
  return (
    <FormGroup className="clearfix form-actions">
      <Col smOffset={2}>
        <Button bsStyle="primary" type="submit">
          <i className="fa fa-check bigger-110"/>
          {' '}提交
        </Button>
        &nbsp; &nbsp; &nbsp;
        <Button componentClass="a" href={url}>
          <i className="fa fa-undo bigger-110"/>
          {' '}返回列表
        </Button>
      </Col>
    </FormGroup>
  );
}

export default FormAction
