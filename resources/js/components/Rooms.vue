<template>
    <div>
        <content-header page="Rooms">
            <template>
                <li class="breadcrumb-item active">Rooms</li>
            </template>
        </content-header>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4" v-for="(room, index) in 1" :key="index">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="p-5">
                                    <h3 class="profile-username text-center">
                                        Room name
                                    </h3>

                                    <p class="text-muted text-center">
                                        Room type | 5 available rooms
                                    </p>
                                </div>

                                <ul
                                    class="list-group list-group-unbordered mb-3"
                                >
                                    <li class="list-group-item">
                                        <b>Room Price</b>
                                        <a class="float-right">price</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Room Size</b>
                                        <a class="float-right">size</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Room Capacity</b>
                                        <a class="float-right">capacity</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Room Services</b>
                                        <a class="float-right">services</a>
                                    </li>
                                </ul>

                                <router-link
                                    :to="`/profile/${room.id}`"
                                    class="btn btn-primary btn-block"
                                    >Check Room</router-link
                                >
                                <button class="btn btn-danger btn-block" @click="deleteRoom(room.id)">Delete room</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <modal
            :title="method == 'create' ? 'Create new room' : 'Edit room'"
            :submit="method == 'create' ? 'Create room' : 'Update room'"
            :method="method == 'create' ? 'create' : 'update'"
            @submitForm="submitForm"
        >
            <template>
                <div class="form-group">
                    <label for="name">Room Name</label>
                    <input 
                        v-model="form.name"
                        type="text"
                        id="name"
                        class="form-control"
                        :class="{
                            'is-invalid': form.errors.has('name')
                        }"
                    >
                    <has-error :form="form" field="name"></has-error>
                </div>

                <div class="form-group">
                    <label for="room_type_id">Room Type</label>
                    <select 
                        v-model="form.room_type_id" 
                        id="room_type_id"
                        class="form-control"
                        :class="{
                            'is-invalid': form.errors.has('room_type_id')
                        }"
                    >
                        <option value="">Select Type</option>
                        <option value="double">Double Room</option>
                        <option value="triple">Triple Room</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="amount">Room Amount</label>
                    <input 
                        v-model="form.amount"
                        type="number"
                        id="amount"
                        class="form-control"
                        :class="{
                            'is-invalid': form.errors.has('amount')
                        }"
                        min="0"
                    >
                    <has-error :form="form" field="amount"></has-error>
                </div>

                <div class="form-group">
                    <label for="photo">Room Photo</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo">
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                    </div>
                </div>
            </template>
        </modal>
    </div>
</template>

<script>
import ContentHeader from './layouts/ContentHeader'
import Modal from './layouts/Modal'

export default {
    name: 'Rooms',

    components: {
        ContentHeader,
        Modal,
    },

    data: function () {
        return {
            rooms: [],
            form: new Form({
                id: '',
                photo: '',
                name: '',
                room_type_id: '',
                amount: '',
            }),
            method: 'create',
        }
    },

    mounted: function () {
        this.fetchRooms()
    },

    methods: {
        showModal: function () {
            this.method = 'create'
            this.form.reset()
            this.form.clear()
            $('#exampleModal').modal('show')
        },

        showEditModal: function (room) {
            this.method = 'update'
            this.form.fill(room)
            $('#exampleModal').modal('show')
        },

        closeModal: function () {
            $('#exampleModal').modal('hide')
        },

        fireSwal: function (icon, title, message) {
            Swal.fire(
                icon,
                title,
                message,
            )
        },

        fireToast: function (icon, message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmedButton: true,
                timer: 200,
            })

            Toast.fire(
                icon,
                title,
            )
        },

        submitForm: function () {
            this.method == 'create' ? this.createRoom() : this.updateRoom()
        },
        
        fetchRooms: function () {
            
        },

        createRoom: function () {

        },

        updateRoom: function () {

        },

        deleteRoom: function () {

        },
    }
};
</script>

<style></style>
