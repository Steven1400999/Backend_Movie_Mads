import React, { useEffect, useState } from 'react';
import { Form, Button, Container, Row, Col } from 'react-bootstrap';
import axios from 'axios';
import { useNavigate } from "react-router-dom";
import InventoryAdminitem from './InventoryAdminItem';

function InventoryAdminUpdateForm(props) {
  const navigate = useNavigate();
  const [currentDate, setCurrentDate] = useState(getFormattedDate());




  function getFormattedDate() {
    const date = new Date();
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }

  function closeform() {

    navigate("/Proyecto_Inventario/public/Admin/inventory");
  }
  return (
    <Container>
      <br /><br />
      <h4>Update an item of the inventory</h4>
      <br /> <br />
      <Form>
        <Row className="mb-3">
          <Form.Group as={Col} controlId="Product">
            <Form.Label>Product</Form.Label>
            <Form.Select defaultValue="Choose..." className="mb-2">
              <option>Choose...</option>
              <option>Product 1</option>
              <option>Product 2</option>
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
            <Form.Control type="date" placeholder="Update Date" defaultValue={currentDate} />
          </Form.Group>

          <Form.Group as={Col} controlId="Supplier">
            <Form.Label>Supplier</Form.Label>
            <Form.Select defaultValue="Choose..." className="mb-2">
              <option>Choose...</option>
              <option>Supplier 1</option>
              <option>Supplier 2</option>
            </Form.Select>
          </Form.Group>
        </Row>

        <Button variant="success" type="submit"  >Update item</Button>
        <br />
        <br />
        <Button variant="danger" onClick={closeform} >Close</Button>

      </Form>
    </Container>
  );
}

export default InventoryAdminUpdateForm;
