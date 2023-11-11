import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import { Form,Button, Card, Stack, Spinner, Container, Row, Col } from 'react-bootstrap';
import axios from 'axios';

function InventoryAdminUpdateForm() {
    


    return (
        <>

<Form>
      <Row className="mb-3">

      <Form.Group as={Col} controlId="Product">
          <Form.Label>Product</Form.Label>
          <Form.Select defaultValue="Choose...">
            <option>Choose...</option>
            <option>...</option>
          </Form.Select>
        </Form.Group>

        <Form.Group as={Col} controlId="Stock">
          <Form.Label>Stock</Form.Label>
          <Form.Control type="number" placeholder="Stock" />
        </Form.Group>
      </Row>

      <Row className="mb-3">

      <Form.Group as={Col} controlId="Date">
          <Form.Label>Date</Form.Label>
          <Form.Control placeholder="Update Date" />
        </Form.Group>

        <Form.Group as={Col} controlId="Supplier">
          <Form.Label>Supplier</Form.Label>
          <Form.Select defaultValue="Choose...">
            <option>Choose...</option>
            <option>...</option>
          </Form.Select>
        </Form.Group>
      </Row>

      <Button variant="success">Success</Button>
      
    </Form>
      </>
    );
}



export default InventoryAdminUpdateForm;