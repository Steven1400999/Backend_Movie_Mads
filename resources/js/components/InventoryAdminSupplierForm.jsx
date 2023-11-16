import React, { useEffect, useState, useContext } from 'react';
import { Form, Button, Container, Row, Col } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import SupplierTable from './componentsAdmin/SupplierTable';
import axios from 'axios';
import { Context } from '../Context';

function InventoryAdminSupplierForm() {
  const navigate = useNavigate();
  const [itemData, setItemData] = useState();
  const location = useLocation();
  const [suppliers, setSupplierData] = useState([]);
  const { token } = useContext(Context);
  const [error, setError] = useState('');

  useEffect(() => {
    const fetchData = async () => {
      try {
        const supplierResponse = await axios.get("http://localhost/Proyecto_Inventario/public/api/supplier_index", {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        });
        setSupplierData(supplierResponse.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, [token]);

  function closeform() {
    navigate('/Proyecto_Inventario/public/Admin/inventory');
  }

  const handleStoresuppliery = async (e) => {
    e.preventDefault();

    const supplierName = e.target.form.Name.value.trim();

    if (!supplierName) {
      setError('Supplier name is required.');
      return;
    } else {
      setError('');
    }

    try {
     
      const response = await axios.post(
        'http://localhost/Proyecto_Inventario/public/api/supplier_store',
        {
          name: supplierName,
        },
        {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        }
      );

      console.log('Supplier added successfully:', response.data);

      navigate('/Proyecto_Inventario/public/Admin/inventory');
    } catch (error) {
      alert('Supplier already exists');
      console.error('Error adding supplier:', error);
    }
  };

  return (
    <Container>
      <br />
      <br />
      <h4>Add a supplier</h4>
      <br />
      <br />

      <Form>
        <Row className="mb-3">
          <Form.Group as={Col} controlId="Name">
            <Form.Label>Name:</Form.Label>
            <Form.Control type="text" placeholder="Supplier name" defaultValue={itemData?.description || ''} />
          </Form.Group>
        </Row>
        <Row className="mb-3">
          <Col>
            <Button variant="success" type="submit" onClick={handleStoresuppliery}>
              Add supplier
            </Button>
            <br />
            <br />
          </Col>
          <Col>
            <Button variant="secondary" onClick={closeform}>
              Close
            </Button>
          </Col>
          <Col></Col>
        </Row>
      </Form>

      {error && (
        <Row>
          <Col>
            <p style={{ color: 'red' }}>{error}</p>
          </Col>
        </Row>
      )}

      <SupplierTable suppliers={suppliers} />
    </Container>
  );
}

export default InventoryAdminSupplierForm;
