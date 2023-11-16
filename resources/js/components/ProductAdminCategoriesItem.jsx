import React, { useState, useEffect,useContext } from "react";
import { Card, Button } from "react-bootstrap";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import { Context } from '../Context';


function ProductAdminCategoriesItem(props) {
    const navigate = useNavigate();
    const { token, rol_id } = useContext(Context);


    const id = props.id;
    const name = props.name;


    useEffect(() => {

    }, []);
    

const handleDestroyItem = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post('http://localhost/Proyecto_Inventario/public/api/product_category_destroy',
        {
          id: props.id,

        },
        {
          headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`,
          },
        });

      console.log('Product catergory destroyed successfully:', response.data);
      navigate('/Proyecto_Inventario/public/Admin/products');




    } catch (error) {
      console.error('Error destroying product catergory:', error);
      if (error.response.status === 409) {
        alert('Product catergory is being used on the inventory');
      }
    }
  };


    return (
        <Card style={{ width: '18rem', borderColor: 'purple' }}>
            <Card.Body>
                <Card.Title>ID: {id}</Card.Title>
                <hr />
                <Card.Subtitle>Product Category: {name}</Card.Subtitle>
       
       <br />
            <Button variant="danger" onClick={handleDestroyItem}>
              Delete category
            </Button>
        
            </Card.Body>
        </Card>

    );
}

export default ProductAdminCategoriesItem;