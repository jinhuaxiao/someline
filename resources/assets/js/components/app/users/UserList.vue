<style scoped>
</style>

<template>

    <div class="wrapper-md">

        <div class="row">

            <div class="list-group list-group-lg list-group-sp">
                <template v-for="item of items">
                    <div class="col-md-4 m-b-sm">
                        <sl-user-list-item :item="item"></sl-user-list-item>
                    </div>
                </template>
            </div>

        </div>

        <div class="row">
            <pagination :pageInfo="pageInfo" @change="fetchData"></pagination>
        </div>

    </div>

</template>

<script>
    export default{
        props: [],
        data() {
            return {
                items: [],
                pagination:{},
                pageInfo: {},
            };
        },
        computed: {},
        components: {
            'sl-user-list-item': require('./UserListGroupItem.vue'),
            'pagination': require('../../console/pagination'),
        },
        mounted(){
            console.log('Component Ready.');

            this.fetchData();
        },
        watch: {},
        events: {},
        methods: {
            fetchData(page){

                if (typeof page === 'undefined') {
                    page = 1;
                }
                this.$api.get('/users?page=' + page, {
                    params: {
//                        include: ''
                    }
                })
                    .then((response => {
                        console.log(response);
                        this.items = response.data.data;
                        this.pagination = response.data.meta.pagination;
                        this.pageInfo = {
                            total:this.pagination.total,  // 记录总条数   默认空，如果小于pageNum则组件不显示   类型Number
                            total_pages:this.pagination.total_pages,
                            current:this.pagination.current_page,  // 当前页数，   默认为1                             类型Number
                            pagenum:10, // 每页显示条数,默认10                              类型Number
                            pagegroup:5,    // 分页条数     默认为5，需传入奇数                 类型Number
                            skin:'#337ab7'  // 选中页码的颜色主题 默认为'#16a086'               类型String
                        };
                    }).bind(this))
                    .catch((error => {
                        console.error(error);
                    }).bind(this));

            }
        },
    }
</script>