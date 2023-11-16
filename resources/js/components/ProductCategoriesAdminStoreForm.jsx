import React, { useState, useEffect, useContext } from 'react';
import { Form, Button, Container, Row, Col, Toast } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import axios from 'axios';
import { Context } from '../Context';


function ProductCategoriesAdminStoreForm() {
  const navigate = useNavigate();
  const [itemData, setItemData] = useState();
  const [productData, setProductData] = useState([]);

  const location = useLocation();
  const [products, setProducts] = useState([]);
  const [product_category, setProduct_category] = useState([]);
  const { token, rol_id } = useContext(Context);
  const [errors, setErrors] = useState({
    name: ''
  });


  function closeform() {
    navigate('/Proyecto_Inventario/public/Admin/products');
  }

  const handleStoreProductCategory = async (e) => {
    e.preventDefault();
    const name = e.target.form.Name.value;

    const newErrors = {
      name: ''
    };

    if (!name) {
      newErrors.name = 'Name is required.';
    }
    setErrors(newErrors);

    if (Object.values(newErrors).some(error => error !== '')) {
      return;
    }

    try {
      const response = await axios.post('http://localhost/Proyecto_Inventario/public/api/product_category_store',
        {
          name: e.target.form.Name.value,
        },
        {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        }
      );
  
      console.log('Product category created successfully:', response.data);
  
      navigate('/Proyecto_Inventario/public/Admin/products');
    } catch (error) {
      alert('Product category already exists');
      console.error('Product category error:', error);
    }
  

    }
  
  return (
    <Container>
      <br />
      <br />
      <h4>Create a category product</h4>
      <br />
      <br />

      <Form>
        <Row className="mb-3">
          <Form.Group as={Col} controlId="Name">
            <Form.Label>Name:</Form.Label>
            <Form.Control type="text" placeholder="Category product name" defaultValue={itemData?.description || ''} />
            {errors.name && <p style={{ color: 'red' }}>{errors.name}</p>}
          </Form.Group>

        </Row>
        <Row className="mb-3">
          <Col>

            <Button variant="success" type="submit" onClick={handleStoreProductCategory}>
              Create category product
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

      <hr />
                
    </Container>
  );

  }

export default ProductCategoriesAdminStoreForm;