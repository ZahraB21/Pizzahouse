import React, { Component } from "react";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import About from "./About";
import Header from "./Header";
import axios from "axios";

class Home extends Component {
    constructor() {
        super();
        this.state = {
            pizzas: []
        };
    }

    componentDidMount() {
        axios
            .get("http://127.0.0.1:8000/pizzas/react/listing")
            .then(response => this.setState({ pizzas: response.data }));
    }

    render() {
        const title = "Home web page.";
        const pizzas = this.state.pizzas.map(pizza => {
            return (
                <tr key={pizza.id}>
                    <th scope="col">{pizza.name}</th>
                    <th scope="col">{pizza.type}</th>
                    <th scope="col">{pizza.base}</th>
                    <th scope="col">{pizza.toppings.join(", ")}</th>
                </tr>
            );
        });
        return (
            <div className="container">
                <h1>This is the home page</h1>
                <table className="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>{pizzas}</tbody>
                </table>
            </div>
        );
    }
}

export default Home;
