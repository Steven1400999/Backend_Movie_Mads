import React, { useEffect, useState } from 'react';
import { Form, Button, Container, Row, Col, Toast } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import ProductTable from './componentsAdmin/ProductTable';
import SupplierTable from './componentsAdmin/SupplierTable';
import axios from 'axios';

function InventoryAdminUpdateForm() {
  const navigate = useNavigate();
  const [currentDate, setCurrentDate] = useState(getFormattedDate());
  const [itemData, setItemData] = useState();
  const location = useLocation();
  const [products, setProducts] = useState([]);
  const [suppliers, setSuppliers] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        if (location.state && location.state.itemData) {
          setItemData(location.state.itemData);
        }

        const productResponse = await axios.get('http://localhost/Proyecto_Inventario/public/api/product_index');
        setProducts(productResponse.data);

        const supplierResponse = await axios.get('http://localhost/Proyecto_Inventario/public/api/supplier_index');
        setSuppliers(supplierResponse.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, [location.state]);

  function getFormattedDate() {
    const date = new Date();
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }

  function closeform() {
    navigate('/Proyecto_Inventario/public/Admin/inventory');
  }


  const handleStoreItem = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post('http://localhost/Proyecto_Inventario/public/api/inventory_store', {
        product_id: e.target.form.Product.value,
        stock: e.target.form.Stock.value,
        supplier_id: e.target.form.Supplier.value,
        admission_date: e.target.form.Date.value,
      });

      console.log('Item updated successfully:', response.data);

      navigate('/Proyecto_Inventario/public/Admin/inventory');

    } catch (error) {
      console.error('Error updating item:', error);

    }
  };



  return (
    <Container>
      <br />
      <br />
      <h4>Store or create an item of the inventory</h4>
      <br />
      <br />

      <Form>
        <Row className="mb-3">
          <Form.Group as={Col} controlId="Product">
            <Form.Label>Product</Form.Label>
            <Form.Select defaultValue={itemData?.product_id || ''} className="mb-2">
              {[...products.filter(product => product.id === itemData?.product_id), ...products.filter(product => product.id !== itemData?.product_id)].map((product) => (
                <option key={product.id} value={product.id}>
                  {`${product.id} - ${product.name}`}
                </option>
              ))}
            </Form.Select>
          </Form.Group>

          <Form.Group as={Col} controlId="Stock">
            <Form.Label>Stock</Form.Label>
            <Form.Control type="number" placeholder="Stock" defaultValue={itemData?.stock || ''} />
          </Form.Group>
        </Row>

        <Row className="mb-3">
          <Form.Group as={Col} controlId="Date">
            <Form.Label>Date</Form.Label>
            <Form.Control type="date" placeholder="Update Date" defaultValue={currentDate} />
          </Form.Group>

          <Form.Group as={Col} controlId="Supplier">
            <Form.Label>Supplier</Form.Label>
            <Form.Select defaultValue={itemData?.supplier_id || ''} className="mb-2">
              {[...suppliers.filter(supplier => supplier.id === itemData?.supplier_id), ...suppliers.filter(supplier => supplier.id !== itemData?.supplier_id)].map((supplier) => (
                <option key={supplier.id} value={supplier.id}>
                  {`${supplier.id} - ${supplier.name}`}
                </option>
              ))}
            </Form.Select>
          </Form.Group>
        </Row>
        <Row className="mb-3">
          <Col>

            <Button variant="success" type="submit" onClick={handleStoreItem}>
              Create an item
            </Button>
            <br />
            <br />
          </Col>

          <Col>

            <Button variant="secondary" onClick={closeform}>
              Close
            </Button>
          </Col>
          <Col>


          </Col>
        </Row>


      </Form>
    </Container>
  );
}

export default InventoryAdminUpdateForm;