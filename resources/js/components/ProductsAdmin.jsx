import React, { useEffect, useState } from 'react';
import { Button, Container, Row, Col, DropdownButton, Dropdown, Spinner } from 'react-bootstrap';
import axios from 'axios';
import InventoryAdminitem from './InventoryAdminItem';
import { useNavigate } from "react-router-dom";
import ProductAdminItem from './ProductAdminItem';

function ProductsAdmin() {
    const [productData, setProductData] = useState([]);
    const [product_categoryData, setProduct_categoryData] = useState([]);
    const [selectedProduct, setSelectedProduct] = useState(null);
    const [selectedStock, setSelectedStock] = useState(null);
    const [selectedDate, setSelectedDate] = useState(null);
    const [selectedSupplier, setSelectedSupplier] = useState(null);
    const navigate = useNavigate();
    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_index");
                setProductData(response.data);

                const Product_categoryData = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_category_index");
                setProduct_categoryData(Product_categoryData.data);

            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, []);

    const handleFilter = async () => {
        try {
            const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/inventory_show", {
                params: {
                    product_id: selectedProduct,
                    stock: selectedStock,
                    admission_date: selectedDate,
                    supplier_id: selectedSupplier,
                },
            });
            setProductData(response.data);
        } catch (error) {
            console.error('Error fetching filtered data:', error);
        }
    };

    const handleClearFilters = async () => {
        try {
            const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/inventory_index");
            setProductData(response.data);
            setSelectedProduct(null);
            setSelectedStock(null);
            setSelectedDate(null);
            setSelectedSupplier(null);
        } catch (error) {
            console.error('Error clearing filters:', error);
        }
    };



    function showFormStore() {
        navigate("/Proyecto_Inventario/public/Admin/product_store_form");
    }



    if (!productData.length) {
        return (
            <Spinner animation="border" role="status">
                <span className="visually-hidden">Loading...</span>
            </Spinner>
        );
    }

    return (
        <>

            <hr />
            <Container fluid>
                <Row className="gap-6">
                    {productData.map((product) => (
                        <ProductAdminItem
                            key={product.id}
                            id={product.id}
                            name={product.name}
                            description={product.description}
                            price={product.price}
                            product_category_id={product.product_category_id}
                        />
                    ))}
                </Row>
            </Container>
        </>
    );
}

export default ProductsAdmin;
