import './bootstrap';

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//import './components/ListCards';

import ReactDOM from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import Menu from './components/Menu';
import Main from "./components/Main";
import Login from './components/Login';
import ListCards from './components/ListCards';
import { Card } from 'react-bootstrap';
import Card_C from './components/Card_C';

ReactDOM.createRoot(document.getElementById('app')).render(
    <BrowserRouter>





<Main/>










    </BrowserRouter>
)