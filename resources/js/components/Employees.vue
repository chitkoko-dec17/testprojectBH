<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Employee Lists</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Job</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody v-if="employees">
                                    <tr v-for="(employee,index) in employees.data" :key="index">
                                        <td>{{ employee.id }}</td>
                                        <td>{{ employee.name }}</td>
                                        <td>{{ employee.age }}</td>
                                        <td>{{ employee.job }}</td>
                                        <td>{{ employee.salary }}</td>
                                    </tr>
                                </tbody>
                                <tbody v-else>
                                    <tr>
                                        <td align="center" colspan="3">No record found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <pagination align="center" :data="employees" @pagination-change-page="list"></pagination>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import pagination from 'laravel-vue-pagination'
    export default {
        name:"employees",
        components:{
            pagination
        },
        data(){
            return {
                employees:{
                    type:Object,
                    default:null
                }
            }
        },
        mounted(){
            this.list()
        },
        methods:{
            async list(page=1){
                await axios.get(`/api/employees?page=${page}`).then(({data})=>{
                    this.employees = data
                }).catch(({ response })=>{
                    console.error(response)
                })
            }
        }
    }
</script>

<style scoped>
    .pagination{
        margin-bottom: 0;
    }
</style>