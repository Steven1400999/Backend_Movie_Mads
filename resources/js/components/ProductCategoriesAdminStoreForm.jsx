import React, { useState, useEffect, useContext } from 'react';
import { Form, Button, Container, Row, Col, Toast } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import ProductTable from './componentsAdmin/ProductTable';
import SupplierTable from './componentsAdmin/SupplierTable';
import axios from 'axios';
import { Context } from '../Context';

function ProductCategoriesAdminStoreForm() {
  const navigate = useNavigate();
  const [itemData, setItemData] = useState();
  const location = useLocation();
  const [products, setProducts] = useState([]);
  const [product_category, setProduct_category] = useState([]);
  const { token, rol_id } = useContext(Context);

  function closeform() {
    navigate('/Proyecto_Inventario/public/Admin/products');
  }


  const handleStoreProductCategory = async (e) => {
    e.preventDefault();

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

        ,
      );

      console.log('Product updated successfully:', response.data);

      navigate('/Proyecto_Inventario/public/Admin/products');

    } catch (error) {
      console.error('Error updating item:', error);

    }
  };



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
    </Container>
  );
}

export default ProductCategoriesAdminStoreForm;