import React, { useEffect, useState } from 'react';
import { Form, Button, Container, Row, Col } from 'react-bootstrap';
import axios from 'axios';
import { useNavigate } from "react-router-dom";

function InventoryAdminUpdateForm() {
  const navigate = useNavigate();


  function closeform(props){

    const id = props.id;
    const product_id = props.product_id;
    const stock = props.stock;
    const admission_date = props.admission_date;
    const supplier_id = props.supplier_id;
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
                        <Form.Control type="date" placeholder="Update Date" />
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
