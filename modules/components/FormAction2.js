import React from 'react';
import {FormGroup, Button, Col} from 'react-bootstrap';
import CListBtn from "components/CListBtn";

function FormAction2() {
  return (
    <FormGroup className="clearfix form-actions">
      <Col smOffset={2}>
        <Button bsStyle="primary" type="submit">
          提交
        </Button>
        &nbsp; &nbsp; &nbsp;
        <CListBtn/>
      </Col>
    </FormGroup>
  );
}

export default FormAction2
