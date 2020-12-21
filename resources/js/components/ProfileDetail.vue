<template>
    <div>
        <content-header page="Profile">
                <template>
                    <li class="breadcrumb-item"><router-link to="/profile">Profile</router-link></li>
                    <li class="breadcrumb-item active">{{ $route.params.username }}</li>
                </template>
        </content-header>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" :src="user.profile_picture || '/img/user.png'">
                                </div>

                                <h3 class="profile-username text-center">{{ user.username }}</h3>

                                <p class="text-muted text-center">{{ user.level }}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                                    <button 
                                        class="btn ml-auto" 
                                        :class="edit ? 'btn-danger' : 'btn-success'"
                                        v-if="authenticatedUser.level == 'superadmin'" 
                                        @click="edit = !edit">
                                        {{ edit ? 'Cancel edit' : 'Edit profile' }}
                                    </button>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="general">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" :readonly="!edit" name="username" class="form-control" id="username" placeholder="Username" :value="user.username">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" :readonly="!edit" name="first_name" class="form-control" id="first_name" placeholder="First Name" :value="user.first_name">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" :readonly="!edit" name="last_name" class="form-control" id="last_name" placeholder="Last Name" :value="user.last_name">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label for="email_address" class="col-sm-2 col-form-label">Email Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" :readonly="!edit" name="email_address" class="form-control" id="email_address" placeholder="Email Address" :value="user.email_address">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" :readonly="!edit" name="password" class="form-control" id="password" :placeholder="edit ? 'Leave empty if not changing' : ''">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label for="level" class="col-sm-2 col-form-label">Level</label>
                                                <div class="col-sm-10">
                                                    <select :readonly="!edit" name="level" class="form-control" id="level">
                                                        <option value="admin" :selected="user.level == 'admin'">Admin</option>
                                                        <option value="superadmin" :selected="user.level == 'superadmin'">Super Admin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row" v-if="edit">
                                                <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-block btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ContentHeader from './layouts/ContentHeader'

export default {
    name: 'ProfileDetail',

    components: {
        ContentHeader,
    },

    data: function () {
        return {
            username: this.$route.params.username,
            user: [],
            authenticatedUser: user,
            edit: false,
        }
    },

    mounted: function () {
        this.fetchUser()
    },

    methods: {
        fetchUser: function () {
            axios.get(`/api/users/${this.username}`)
                .then(({data}) => {
                    this.user = data[0]
                })
                .catch(error => {
                    console.log(error.message)
                })
        }
    }
}
</script>

<style lang="scss" scoped>
.box-profile {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.75)), 
                url(https://images.unsplash.com/photo-1522124624696-7ea32eb9592c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80) center center/cover;
    
    h3, 
    p {
        margin: 0;
        color: #fff !important;
    }

    h3 { margin-top: 1rem; }

    p { opacity: 0.5; }
}
</style>