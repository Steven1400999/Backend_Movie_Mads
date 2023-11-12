import React, { useState, useEffect } from "react";
import { Card, Button } from "react-bootstrap";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import InventoryAdminUpdateForm from "./InventoryAdminUpdateForm";

function ProductAdminCategoriesItem(props) {
    const navigate = useNavigate();

    const id = props.id;
    const name = props.name;

    
        
    function showForm() {
        navigate("/Proyecto_Inventario/public/Admin/product_categories");
    }


    return (
        <Card style={{ width: '18rem', borderColor:'purple'}}>
            <Card.Body>
                <Card.Title>ID: {id}</Card.Title>
                <hr />
                <Card.Subtitle>Product Category: {name}</Card.Subtitle>
            </Card.Body>
        </Card>

    );
}

export default ProductAdminCategoriesItem;