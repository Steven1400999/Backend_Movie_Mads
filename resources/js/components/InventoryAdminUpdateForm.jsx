import React, { useState, useEffect, useContext } from 'react';
import { Form, Button, Container, Row, Col } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import axios from 'axios';
import { Context } from '../Context';

function InventoryAdminUpdateForm() {
  const navigate = useNavigate();
  const [currentDate, setCurrentDate] = useState(getFormattedDate());
  const [itemData, setItemData] = useState();
  const location = useLocation();
  const [products, setProducts] = useState([]);
  const [suppliers, setSuppliers] = useState([]);
  const { token, rol_id } = useContext(Context);
  const [errors, setErrors] = useState({
    product: '',
    stock: '',
    supplier: '',
    date: '',
  });

  useEffect(() => {
    const fetchData = async () => {
      try {
        if (location.state && location.state.itemData) {
          setItemData(location.state.itemData);
        }

        const productResponse = await axios.get('http://localhost/Proyecto_Inventario/public/api/product_index', {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        });
        setProducts(productResponse.data);

        const supplierResponse = await axios.get('http://localhost/Proyecto_Inventario/public/api/supplier_index', {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        });
        setSuppliers(supplierResponse.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, [location.state, token]);

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

  const handleUpdateItem = async (e) => {
    e.preventDefault();

    const product = e.target.form.Product.value;
    const stock = e.target.form.Stock.value.trim();
    const supplier = e.target.form.Supplier.value;
    const date = e.target.form.Date.value;

    const stockRegex = /^\d+$/;

    const newErrors = {
      product: '',
      stock: '',
      supplier: '',
      date: '',
    };

    if (!product) {
      newErrors.product = 'Product is required.';
    }

    if (!stockRegex.test(stock)) {
      newErrors.stock = 'Stock have to be positive integer.';
    }

    if (!supplier) {
      newErrors.supplier = 'Supplier is required.';
    }

    if (!date) {
      newErrors.date = 'Date is required.';
    }

    setErrors(newErrors);

    if (Object.values(newErrors).some(error => error !== '')) {
      return;
    }

    try {
      const response = await axios.post(
        'http://localhost/Proyecto_Inventario/public/api/inventory_update',
        {
          id: itemData.id,
          product_id: product,
          stock: stock,
          supplier_id: supplier,
          admission_date: date,
        },
        {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        }
      );

      console.log('Item updated successfully:', response.data);

      navigate('/Proyecto_Inventario/public/Admin/inventory');
    } catch (error) {
      console.error('Error updating item:', error);
    }
  };const handleDestroyItem = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post('http://localhost/Proyecto_Inventario/public/api/inventory_destroy',
        {
          id: itemData.id,

        },
        {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        });

      console.log('Item destroyed successfully:', response.data);
      navigate('/Proyecto_Inventario/public/Admin/inventory');




    } catch (error) {
      console.error('Error destroying item:', error);

    }
  };

  return (
    <Container>
      <br />
      <br />
      <h4>Update an item of the inventory</h4>
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
            {errors.product && <p style={{ color: 'red' }}>{errors.product}</p>}
          </Form.Group>

          <Form.Group as={Col} controlId="Stock">
            <Form.Label>Stock</Form.Label>
            <Form.Control type="number" placeholder="Stock" defaultValue={itemData?.stock || ''} />
            {errors.stock && <p style={{ color: 'red' }}>{errors.stock}</p>}
          </Form.Group>
        </Row>

        <Row className="mb-3">
          <Form.Group as={Col} controlId="Date">
            <Form.Label>Date</Form.Label>
            <Form.Control type="date" placeholder="Update Date" defaultValue={currentDate} />
            {errors.date && <p style={{ color: 'red' }}>{errors.date}</p>}
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
            {errors.supplier && <p style={{ color: 'red' }}>{errors.supplier}</p>}
          </Form.Group>
        </Row>
        <Row className="mb-3">
          <Col>
            <Button variant="success" type="submit" onClick={handleUpdateItem}>
              Update item
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
            <Button variant="danger" onClick={handleDestroyItem}>
              Delete Item
            </Button>
          </Col>
        </Row>
      </Form>
    </Container>
  );
}

export default InventoryAdminUpdateForm;
