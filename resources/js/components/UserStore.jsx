import React, { useState, useEffect, useContext } from 'react';
import { Form, Button, Container, Row, Col } from 'react-bootstrap';
import { useNavigate, useLocation } from 'react-router-dom';
import axios from 'axios';
import { Context } from '../Context';

function InventoryAdminUpdateForm() {
  const navigate = useNavigate();
  const { token, rol_id } = useContext(Context);
  const [errors, setErrors] = useState({});


  const closeform = () => {
    navigate('/Proyecto_Inventario/public/Admin/users');
  };

  const handleCreateUser = async (e) => {
    e.preventDefault();
    const name = e.target.form.Name.value;
    const email = e.target.form.email.value;
    const password = e.target.form.Password.value;

    const newErrors = {};

    if (!name) {
      newErrors.name = 'Name is required.';
    }

    if (!email || !email.includes('@') ) {
      newErrors.email = 'Valid email is required with "@" and ".com".';
    }

    if (!password || password.length < 6) {
      newErrors.password = 'Password should have at least 8 characters.';
    }

    setErrors(newErrors);

    if (Object.keys(newErrors).length > 0) {
      return;
    }
    try {
      const response = await axios.post('http://localhost/Proyecto_Inventario/public/api/register', {
        name: e.target.form.Name.value,
        email: e.target.form.email.value,
        password: e.target.form.Password.value,
        rol_id: 2,
      },
        {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        });
      console.log('User updated successfully:', response.data);

      navigate('/Proyecto_Inventario/public/Admin/users');
    } catch (error) {
      console.error('Error updating User:', error);
    }
  };


  return (
    <Container>
      <br />
      <br />
      <h4>Create a user</h4>
      <br />
      <br />

      <Form >
        <Row className="mb-3">
          <Form.Group as={Col} controlId="Name">
            <Form.Label>Name:</Form.Label>
            <Form.Control type="text" placeholder="Name" />
            {errors.name && <p style={{ color: 'red' }}>{errors.name}</p>}
          </Form.Group>

          <Form.Group as={Col} controlId="email">
            <Form.Label>Email:</Form.Label>
            <Form.Control type="email" placeholder="Email" />
            {errors.email && <p style={{ color: 'red' }}>{errors.email}</p>}
          </Form.Group>
        </Row>

        <Row className="mb-3">
          <Form.Group as={Col} controlId="Password">
            <Form.Label>Password:</Form.Label>
            <Form.Control type="password" placeholder="Password" />
            {errors.password && <p style={{ color: 'red' }}>{errors.password}</p>}
          </Form.Group>

        </Row>

        <Row className="mb-3">
          <Col>
            <Button variant="success" onClick={handleCreateUser}>
              Create user
            </Button>
            <br />
            <br />
          </Col>

          <Col>
            <Button variant="secondary" onClick={closeform}>
              Close
            </Button>
          </Col>

        </Row>
      </Form>
    </Container>
  );
}

export default InventoryAdminUpdateForm;
