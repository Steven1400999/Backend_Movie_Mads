import React, { useState, useEffect } from "react";
import { Card, Button } from "react-bootstrap";
import axios from "axios";

function InventoryAdminitem(props) {
    const [productName, setProductName] = useState('');
    const [supplierName, setSupplierName] = useState('');
    const id = props.id;
    const product_id = props.product_id;
    const stock = props.stock;
    const admission_date = props.admission_date;
    const supplier_id = props.supplier_id;

    useEffect(() => {
        const fetchProductDetails = async () => {
            try {
                const response = await axios.get(`http://localhost/Proyecto_Inventario/public/api/product_index`);
                const productDetails = response.data;
                const productName = productDetails.find((product) => product.id === props.product_id).name;
                setProductName(productName);
            } catch (error) {
                console.error(error);
            }
        };

        fetchProductDetails();
    }, [props.product_id]);

    useEffect(() => {
        const fetchSupplierDetails = async () => {
            try {
                const response = await axios.get(`http://localhost/Proyecto_Inventario/public/api/supplier_index`);
                const supplierDetails = response.data;
                const supplierName = supplierDetails.find((supplier) => supplier.id === props.supplier_id).name;
                setSupplierName(supplierName);
            } catch (error) {
                console.error(error);
            }
        };

        fetchSupplierDetails();
    }, [props.supplier_id]);



    return (
        <Card style={{width: '18rem'}}>
            <Card.Body>
                <Card.Title>ID: {id}</Card.Title>
                <hr />
                <Card.Subtitle>Product: {productName}</Card.Subtitle>
                <Card.Text>Stock: {stock}</Card.Text>
                <Card.Text>Admission Date: {admission_date}</Card.Text>
                <Card.Text>Supplier Id: {supplierName}</Card.Text>
                <Button variant="warning">Update</Button>
            </Card.Body>
        </Card>
    );
}

export default InventoryAdminitem;