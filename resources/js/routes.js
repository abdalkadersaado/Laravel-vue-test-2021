let login = require("./components/auth/login.vue").default;
let register = require("./components/auth/register.vue").default;
let forget = require("./components/auth/forget.vue").default;
let logout = require("./components/auth/logout.vue").default;

// End Authentication
let home = require("./components/home.vue").default;

// Supplier Component
let storesupplier = require("./components/supplier/create.vue").default;
let supplier = require("./components/supplier/index.vue").default;
let editsupplier = require("./components/supplier/edit.vue").default;

// Category Component
let storecategory = require("./components/category/create.vue").default;
let category = require("./components/category/index.vue").default;
let editcategory = require("./components/category/edit.vue").default;

// Product Component
let storeproduct = require("./components/product/create.vue").default;
let product = require("./components/product/index.vue").default;
let editproduct = require("./components/product/edit.vue").default;

// Stock Component
let stock = require("./components/product/stock.vue").default;
let editstock = require("./components/product/edit-stock.vue").default;

// Customer Component
let storecustomer = require("./components/customer/create.vue").default;
let customer = require("./components/customer/index.vue").default;
let editcustomer = require("./components/customer/edit.vue").default;

// POS Component
let pos = require("./components/pos/pointofsale.vue").default;

// Order Component
let order = require("./components/order/order.vue").default;
let vieworder = require("./components/order/vieworder.vue").default;
let searchorder = require("./components/order/search.vue").default;

export const routes = [
    {
        path: "/",
        component: login,
        name: "/"
    },

    {
        path: "/register",
        component: register,
        name: "register"
    },
    {
        path: "/forget",
        component: forget,
        name: "forget"
    },
    {
        path: "/logout",
        component: logout,
        name: "logout"
    },
    {
        path: "/home",
        component: home,
        name: "home"
    },

    // Supplier Routes
    {
        path: "/store-supplier",
        component: storesupplier,
        name: "store-supplier"
    },
    {
        path: "/supplier",
        component: supplier,
        name: "supplier"
    },
    {
        path: "/edit-supplier/:id",
        component: editsupplier,
        name: "edit-supplier"
    },

    // Category Routes
    {
        path: "/store-category",
        component: storecategory,
        name: "store-category"
    },
    {
        path: "/category",
        component: category,
        name: "category"
    },
    {
        path: "/edit-category/:id",
        component: editcategory,
        name: "edit-category"
    },

    // Product Routes
    {
        path: "/store-product",
        component: storeproduct,
        name: "store-product"
    },
    {
        path: "/product",
        component: product,
        name: "product"
    },
    {
        path: "/edit-product/:id",
        component: editproduct,
        name: "edit-product"
    },

    // Stock Routes
    {
        path: "/stock",
        component: stock,
        name: "stock"
    },
    {
        path: "/edit-stock/:id",
        component: editstock,
        name: "edit-stock"
    },

    // Customer Routes
    {
        path: "/store-customer",
        component: storecustomer,
        name: "store-customer"
    },
    {
        path: "/customer",
        component: customer,
        name: "customer"
    },
    {
        path: "/edit-customer/:id",
        component: editcustomer,
        name: "edit-customer"
    },

    // POS Routes
    {
        path: "/pos",
        component: pos,
        name: "pos"
    },

    // Order Routes
    {
        path: "/order",
        component: order,
        name: "order"
    },
    {
        path: "/view-order/:id",
        component: vieworder,
        name: "view-order"
    },
    {
        path: "/view-order/:id",
        component: vieworder,
        name: "view-order"
    },
    {
        path: "/searchorder",
        component: searchorder,
        name: "searchorder"
    }
];
