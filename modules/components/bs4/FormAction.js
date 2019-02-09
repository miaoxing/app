import React from 'react';
import {Button, Col, Form, Row} from 'react-bootstrap';
import CListBtn from 'components/bs4/CListBtn';

function FormAction({url, list = true}) {
  return (
    <Form.Group as={Row} className="form-actions">
      <Col sm={{offset: 2}}>
        <Button type="submit">提交</Button>
        &nbsp; &nbsp; &nbsp;{/*todo bs4: m-l*/}
        {list && (url ? <Button href={url} variant="secondary">返回列表</Button> : <CListBtn/>)}
      </Col>
    </Form.Group>
  );
}

export default FormAction;
