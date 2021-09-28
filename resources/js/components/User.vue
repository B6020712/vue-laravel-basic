<template>
    <div>
        <br/>
        <div class="container">
            <h2 class="text-center">แสดงข้อมูล</h2>
            <table class="table table-bordered">
                <tr>
                    <th>รหัส</th>
                    <th>ชื่อ</th>
                    <th>จังหวัด</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                <tr v-for="(user, index) in users">
                    <td>{{user.id}}</td>
                    <td>{{user.name}}</td>
                    <td>{{user.city}}</td>
                    <td><a :href="'/users/' + user.id + '/edit'" class="btn btn-primary">Edit</a></td>
                    <td><a href="javascript:;" class="btn btn-warning" @click="deleteUser(user.id, index)">Delete</a></td>
                </tr>
            </table>
            <a href="/users/create" class="btn btn-primary">เพิ่มข้อมูล</a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: [],
            user: {
                id: 0,
                name: '',
                city: ''
            }
        }
    },
    mounted() {
        this.getUserData();
    },
    methods: {
        getUserData() {
            axios.get('/api/users').then(response => {
                this.users = response.data;
            });
        },
        deleteUser(id, index) {
            axios.delete('/api/users/' + id).then(response => {
                this.users.splice(index, 1);
            });
        }
    }
}
</script>