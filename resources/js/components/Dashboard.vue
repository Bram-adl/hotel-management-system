<template>
    <div>
        <content-header page="Dashboard">
            <template>
                <li class="breadcrumb-item active">Dashboard</li>
            </template>
        </content-header>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Customers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/customers" class="small-box-footer"
                                >More info <i class="fas fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Total Rooms</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="/rooms" class="small-box-footer"
                                >More info <i class="fas fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Room Types</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/rooms/types" class="small-box-footer"
                                >More info <i class="fas fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Room Services</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/rooms/services" class="small-box-footer"
                                >More info <i class="fas fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</template>

<script>
import ContentHeader from './layouts/ContentHeader'

export default {
    name: 'Dashboard',

    components: {
        ContentHeader,
    }
};
</script>

<style></style>
