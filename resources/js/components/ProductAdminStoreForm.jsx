import React, { useEffect, useState } from 'react';
import { Form, Button, Container, Row, Col, Toast } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import ProductTable from './componentsAdmin/ProductTable';
import SupplierTable from './componentsAdmin/SupplierTable';
import axios from 'axios';

function ProductAdminStoreForm() {
  const navigate = useNavigate();
  const [itemData, setItemData] = useState();
  const location = useLocation();
  const [products, setProducts] = useState([]);
  const [product_category, setProduct_category] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        if (location.state && location.state.itemData) {
          setItemData(location.state.itemData);
        }

        const productResponse = await axios.get('http://localhost/Proyecto_Inventario/public/api/product_index');
        setProducts(productResponse.data);

        const product_categoryResponse = await axios.get('http://localhost/Proyecto_Inventario/public/api/product_category_index');
        setProduct_category(product_categoryResponse.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, [location.state]);

  
  function closeform() {
    navigate('/Proyecto_Inventario/public/Admin/products');
  }


  const handleStoreProduct = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post('http://localhost/Proyecto_Inventario/public/api/product_store', {
        name: e.target.form.Name.value,
        description: e.target.form.Description.value,
        price: e.target.form.Price.value,
        product_category_id: e.target.form.Product_category.value,
      });

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
      <h4>Update a product</h4>
      <br />
      <br />

      <Form>
        <Row className="mb-3">
          <Form.Group as={Col} controlId="Name">
            <Form.Label>Name:</Form.Label>
            <Form.Control type="text" placeholder="Product name" defaultValue={itemData?.description || ''} />

          </Form.Group>

          <Form.Group as={Col} controlId="Description">
            <Form.Label>Description:</Form.Label>
            <Form.Control type="text" placeholder="Description" defaultValue={itemData?.description || ''} />
          </Form.Group>
        </Row>

        <Row className="mb-3">
        <Form.Group as={Col} controlId="Price">
            <Form.Label>Price:</Form.Label>
            <Form.Control type="number" placeholder="Price" defaultValue={itemData?.price || ''} />
          </Form.Group>

          <Form.Group as={Col} controlId="Product_category">
            <Form.Label>Product category:</Form.Label>
            <Form.Select defaultValue={itemData?.product_category || ''} className="mb-2">
              {[...product_category.filter(product_category => product_category.id === itemData?.product_category_id), ...product_category.filter(product_category => product_category.id !== itemData?.product_category_id)].map((product_category) => (
                <option key={product_category.id} value={product_category.id}>
                  {`${product_category.id} - ${product_category.name}`}
                </option>
              ))}
            </Form.Select>
          </Form.Group>
        </Row>
        <Row className="mb-3">
          <Col>

            <Button variant="success" type="submit" onClick={handleStoreProduct}>
              Create product
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

export default ProductAdminStoreForm;