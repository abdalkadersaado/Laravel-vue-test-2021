<template>
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>

        <div class="row mb-3">


            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <h6 class="m-0 font-weight-bold text-primary">
                            Out Of Stock Product
                        </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Photo</th>

                                    <th>Buying Price</th>
                                    <th>Status</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="product in products"
                                    :key="product.id"
                                >
                                    <td>{{ product.product_name }}</td>
                                    <td>{{ product.product_code }}</td>
                                    <td>
                                        <img
                                            :src="product.image"
                                            id="em_photo"
                                        />
                                    </td>

                                    <td>{{ product.buying_price }}</td>
                                    <td v-if="product.product_quantity >= 1">
                                        <span class="badge badge-success"
                                            >Available
                                        </span>
                                    </td>
                                    <td v-else=" ">
                                        <span class="badge badge-danger"
                                            >Stock Out
                                        </span>
                                    </td>
                                    <td>{{ product.product_quantity }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>
</template>

<script type="text/javascript">
export default {
    created() {
        if (!User.loggedIn()) {
            this.$router.push({ name: "/" });
        }
    },

    data() {
        return {
            products: ""
        };
    },
    mounted() {

        this.StockOut();
    },
    methods: {

        StockOut() {
            axios
                .get("/api/today/stockout")
                .then(({ data }) => (this.products = data))
                .catch();
        }
    }
};
</script>

<style type="text/css"></style>
