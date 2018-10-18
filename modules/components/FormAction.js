import React from 'react';
import {Button, Col, FormGroup} from 'react-bootstrap';
import CListBtn from 'components/CListBtn';

function FormAction({url, list = true}) {
  return (
    <FormGroup className="clearfix form-actions">
      <Col smOffset={2}>
        <Button bsStyle="primary" type="submit">
          提交
        </Button>
        &nbsp; &nbsp; &nbsp;
        {list && (url ? <Button href={url}>
          <i className="fa fa-undo bigger-110"/>
          {' '}返回列表
        </Button> : <CListBtn/>)}
      </Col>
    </FormGroup>
  );
}

export default FormAction;
