import React, { useState, useEffect } from "react";
import { Card, Button } from "react-bootstrap";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import InventoryAdminUpdateForm from "./InventoryAdminUpdateForm";

function ProductAdminItem(props) {
    const navigate = useNavigate();


    const [product_category, setProduct_category] = useState('');

    const id = props.id;
    const name = props.name;
    const description = props.description;
    const price = props.price;
    const product_category_id = props.product_category_id;

    useEffect(() => {
        const fetchProduct_CategoryName = async () => {
            try {
                const response = await axios.get(`http://localhost/Proyecto_Inventario/public/api/product_category_index`);
                const product_categoryDetails = response.data;
                const product_category = product_categoryDetails.find((product_category) => product_category.id === props.product_category_id).name;
                setProduct_category(product_category);
            } catch (error) {
                console.error(error);
            }
        };

        fetchProduct_CategoryName();
    }, [props.id]);


    const itemData = {
        id: props.id,
        name: props.name,
        description: props.description,
        price: props.price,
        product_category_id: props.product_category_id,
    };
    function showForm(props) {
        navigate("/Proyecto_Inventario/public/Admin/product_update_form", {
            state: { itemData }
        });
    }





    return (
        <Card style={{ width: '18rem' }}>
            <Card.Body>
                <Card.Title>ID: {id}</Card.Title>
                <hr />
                <Card.Subtitle>Name: {name}</Card.Subtitle>
                <Card.Text>Description: {description}</Card.Text>
                <Card.Text>Price: {price}</Card.Text>
                <Card.Text>Product Category: {product_category}</Card.Text>
                <Button variant="warning" onClick={showForm}>Update</Button>
            </Card.Body>
        </Card>

    );
}

export default ProductAdminItem;