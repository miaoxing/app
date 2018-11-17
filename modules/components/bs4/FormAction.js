import React from 'react';
import {Button, Col, Form, Row} from 'react-bootstrap4';
import CListBtn from 'components/bs4/CListBtn';

function FormAction({url, list = true}) {
  return (
    <Form.Group as={Row} className="clearfix form-actions">
      <Col sm={{offset: 2}}>
        <Button type="submit">
          提交
        </Button>
        &nbsp; &nbsp; &nbsp;
        {list && (url ? <Button href={url}><i className="fa fa-undo bigger-110"/>{' '}返回列表</Button> : <CListBtn/>)}
      </Col>
    </Form.Group>
  );
}

export default FormAction;
