<template>
  <div>
    <content-header page="Profile">
        <template>
            <li class="breadcrumb-item active">Profile</li>
        </template>
    </content-header>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"  v-for="(user) in users" :key="user.id">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" :src="user.profile_picture || '/img/user.png'">
                            </div>

                            <h3 class="profile-username text-center">{{ user.username }}</h3>

                            <p class="text-muted text-center">{{ user.level }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                <b>First Name</b> <a class="float-right">{{ user.first_name }}</a>
                                </li>
                                <li class="list-group-item">
                                <b>Last Name</b> <a class="float-right">{{ user.last_name }}</a>
                                </li>
                                <li class="list-group-item">
                                <b>Email Address</b> <a class="float-right">{{ user.email_address }}</a>
                                </li>
                            </ul>

                            <router-link :to="`/profile/${user.username}`" class="btn btn-primary btn-block">Check Profile</router-link>
                        </div>
                        <!-- /.card-body -->
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
    name: 'Profile',

    components: {
        ContentHeader,
    },

    data: function () {
        return {
            users: [],
        }
    },

    mounted: function () {
        axios.get(`/api/users`)
            .then(({ data }) => {
                this.users = data
            })
            .catch(error => {
                console.log(error)
            })
    }
}
</script>

<style>

</style>