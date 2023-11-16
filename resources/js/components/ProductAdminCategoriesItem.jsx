import React, { useContext } from "react";
import { Card, Button } from "react-bootstrap";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import { Context } from '../Context';

function ProductAdminCategoriesItem(props) {
    const navigate = useNavigate();
    const { token, rol_id } = useContext(Context);

    const id = props.id;
    const name = props.name;

    const handleDestroyItem = async () => {
        try {
            const response = await axios.post(
                'http://localhost/Proyecto_Inventario/public/api/product_category_destroy',
                {
                    id: props.id,
                },
                {
                    headers: {
                        'Content-Type': 'application/json',
                        Authorization: `Bearer ${token}`,
                    },
                }
            );

            console.log('Product category destroyed successfully:', response.data);
            navigate('/Proyecto_Inventario/public/Admin/products');
        } catch (error) {
            console.error('Error destroying product category:', error);
            if (error.response.status === 409) {
                alert('Product category is being used on a product, you cannot delete this.');
            }
        }
    };

    return (
        <Card style={{ width: '18rem', borderColor: 'purple', boxShadow: '0 4px 8px 0 rgba(0,0,0,0.2)' }}>
            <Card.Body>
                <Card.Title>ID: {id}</Card.Title>
                <hr />
                <Card.Subtitle>Product Category: {name}</Card.Subtitle>
                <br />
                <Button variant="outline-danger" style={{ width: '100%' }} onClick={handleDestroyItem}>
                    Delete category
                </Button>
            </Card.Body>
        </Card>
    );
}

export default ProductAdminCategoriesItem;
