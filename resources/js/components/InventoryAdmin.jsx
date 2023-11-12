import React, { useEffect, useState } from 'react';
import { Button, Container, Row, Col, DropdownButton, Dropdown, Spinner } from 'react-bootstrap';
import axios from 'axios';
import InventoryAdminitem from './InventoryAdminItem';
import { useNavigate } from "react-router-dom";

function InventoryAdmin() {
    const [inventoryData, setInventoryData] = useState([]);
    const [productData, setProductData] = useState([]);
    const [supplierData, setSupplierData] = useState([]);
    const [selectedProduct, setSelectedProduct] = useState(null);
    const [selectedStock, setSelectedStock] = useState(null);
    const [selectedDate, setSelectedDate] = useState(null);
    const [selectedSupplier, setSelectedSupplier] = useState(null);
    const navigate = useNavigate();
    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/inventory_index");
                setInventoryData(response.data);

                const productResponse = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_index");
                setProductData(productResponse.data);

                const supplierResponse = await axios.get("http://localhost/Proyecto_Inventario/public/api/supplier_index");
                setSupplierData(supplierResponse.data);
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
            setInventoryData(response.data);
        } catch (error) {
            console.error('Error fetching filtered data:', error);
        }
    };

    const handleClearFilters = async () => {
        try {
            const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/inventory_index");
            setInventoryData(response.data);
            setSelectedProduct(null);
            setSelectedStock(null);
            setSelectedDate(null);
            setSelectedSupplier(null);
        } catch (error) {
            console.error('Error clearing filters:', error);
        }
    };



    function showFormStore() {
        navigate("/Proyecto_Inventario/public/Admin/store_form");
    }



    if (!inventoryData.length) {
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
                    <DropdownButton id="dropdown-product" title="Product">
                        {productData.map((product) => (
                            <Dropdown.Item key={product.id} onClick={() => setSelectedProduct(product.id)}>
                                {`${product.id} - ${product.name}`}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <DropdownButton id="dropdown-stock" title="Stock">
                        {inventoryData.map((inventory) => (
                            <Dropdown.Item key={inventory.id} onClick={() => setSelectedStock(inventory.stock)}>
                                {inventory.stock}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <DropdownButton id="dropdown-date" title="Admission Date">
                        {inventoryData.map((inventory) => (
                            <Dropdown.Item key={inventory.id} onClick={() => setSelectedDate(inventory.admission_date)}>
                                {inventory.admission_date}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <DropdownButton id="dropdown-supplier" title="Supplier">
                        {supplierData.map((supplier) => (
                            <Dropdown.Item key={supplier.id} onClick={() => setSelectedSupplier(supplier.id)}>
                                {`${supplier.id} - ${supplier.name}`}
                            </Dropdown.Item>
                        ))}
                    </DropdownButton>
                </Col>

                <Col>
                    <Button variant="primary" onClick={handleFilter}>
                        Apply filters</Button>
                </Col>

                <Col>
                    <Button variant="danger" onClick={handleClearFilters}>
                        Delete filters
                    </Button>
                </Col>
                <br />
                <br />

                <hr />
                <Col>
                    <Button variant="success" onClick={showFormStore}>Create an item</Button>
                </Col>
            </Row>

            <hr />
            <Container fluid>
                <Row className="gap-6">
                    {inventoryData.map((inventory) => (
                        <InventoryAdminitem
                            key={inventory.id}
                            id={inventory.id}
                            product_id={inventory.product_id}
                            stock={inventory.stock}
                            admission_date={inventory.admission_date}
                            supplier_id={inventory.supplier_id}
                        />
                    ))}
                </Row>
            </Container>
        </>
    );
}

export default InventoryAdmin;
