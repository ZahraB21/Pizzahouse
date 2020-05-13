import React, { Component } from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import Header from "./Header";
import Home from "./Home";
import Add from "./Add";

export default class Index extends Component {
    render() {
        return (
            <Router>
                <div className="app">
                    <Header />
                    <Link to="/pizzas/react/listing">Listing</Link>
                    <Link to="/pizzas/react/add">Add</Link>
                    <Route
                        exact
                        path="/pizzas/react/listing"
                        component={Home}
                    />
                    <Route exact path="/pizzas/react/add" component={Add} />
                </div>
            </Router>
        );
    }
}

if (document.getElementById("app")) {
    ReactDOM.render(<Index />, document.getElementById("app"));
}
