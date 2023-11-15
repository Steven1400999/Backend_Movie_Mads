import React, { useState, useEffect, useContext } from 'react';
import { Button, Container, Row, Col, DropdownButton, Dropdown, Spinner } from 'react-bootstrap';
import axios from 'axios';
import InventoryAdminitem from './InventoryAdminItem';
import { useNavigate } from "react-router-dom";
import ProductAdminItem from './ProductAdminItem';
import { Context } from '../Context';

function ProductsAdmin() {
    const [productData, setProductData] = useState([]);
    const [product_categoryData, setProduct_categoryData] = useState([]);
    const [selectedproduct_category, setSelectedproduct_category] = useState(null);
    const [selectedName, setSelectedName] = useState(null);
    const [selectedPrice, setSelectedPrice] = useState(null);
    const navigate = useNavigate();
    const { token, rol_id } = useContext(Context);

    useEffect(() => {


        const fetchData = async () => {
            try {
                const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_index",
                    {
                        headers: {
                            'Content-Type': 'application/json',
                            Authorization: `Bearer ${token}`,
                        },
                    }
                );
                setProductData(response.data);

                const Product_categoryData = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_category_index",
                    {
                        headers: {
                            'Content-Type': 'application/json',
                            Authorization: `Bearer ${token}`,
                        },
                    }

                );
                setProduct_categoryData(Product_categoryData.data);

            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, []);

    const handleFilter = async () => {
        try {
            const response = await axios.post("http://localhost/Proyecto_Inventario/public/api/product_show",
                {
                    name: selectedName,
                    price: selectedPrice,
                    product_category_id: selectedproduct_category,
                },
                {
                    headers: {
                        'Content-Type': 'application/json',
                        Authorization: `Bearer ${token}`,
                    },
                }

                ,);
            setProductData(response.data);
        } catch (error) {
            console.error('Error fetching filtered data:', error);
        }
    };

    const handleClearFilters = async () => {
        try {
            const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_index",
                {
                    headers: {
                        'Content-Type': 'application/json',
                        Authorization: `Bearer ${token}`,
                    },
                }

            );
            setProductData(response.data);
            setSelectedName(null);
            setSelectedPrice(null);
            setSelectedproduct_category(null);
        } catch (error) {
            console.error('Error clearing filters:', error);
        }
    };



    function showFormStore() {
        navigate("/Proyecto_Inventario/public/Admin/product_store_form");
    }

    function showproductcategories() {
        navigate("/Proyecto_Inventario/public/Admin/product_categories");
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
            <Row className="mb-3">
                <Col>
                    <Button variant="outline-secondary" onClick={showFormStore}>Create an item</Button>
                </Col>
                <Col>
                    <Button variant="outline-secondary" onClick={showproductcategories}>Product categories</Button>
                </Col>
            </Row>
            <hr />
            <Row className="mb-3">

                <Col>
                    <DropdownButton id="dropdown-product" title="Name">
                        {productData.map((product) => (
                            <Dropdown.Item key={product.id} onClick={() => setSelectedName(product.name)}>
                                {product.name}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <DropdownButton id="dropdown-stock" title="Price">
                        {productData.map((product) => (
                            <Dropdown.Item key={product.id} onClick={() => setSelectedPrice(product.price)}>
                                {product.price}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <DropdownButton id="dropdown-supplier" title="Product_category">
                        {product_categoryData.map((product_category) => (
                            <Dropdown.Item key={product_category.id} onClick={() => setSelectedproduct_category(product_category.id)}>
                                {`${product_category.id} - ${product_category.name}`}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <Button variant="success" onClick={handleFilter}>
                        Apply filters</Button>
                </Col>

                <Col>
                    <Button variant="danger" onClick={handleClearFilters}>
                        Delete filters
                    </Button>
                </Col>


            </Row>



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
