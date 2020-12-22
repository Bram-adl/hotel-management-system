<template>
  <div>
      <content-header page="Room Services">
          <template>
              <li class="breadcrumb-item"><router-link to="/rooms">Rooms</router-link></li>
              <li class="breadcrumb-item active">Room Services</li>
          </template>
      </content-header>
  </div>
</template>

<script>
import ContentHeader from './layouts/ContentHeader'

export default {
    name: 'RoomServices',

    components: {
        ContentHeader,
    }
}
</script>

<style>

</style>