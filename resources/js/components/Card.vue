<template>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">{{ title }}</div>
            <img class="img-fluid" :src="imgPath" alt="">
            <div class="description">
                {{ description }}
            </div>
            <div class="card-body" v-if="sell">
                <button type="button" class="btn btn-buy">Play</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: 'Example title!'
            },
            imgPath: {
                type: String,
                default: 'Path',
            },
            description: {
                type: String,
                default: 'Example description'
            },
            sell: {
                type: Boolean,
                default: false
            }
        },
    }
</script>

<style lang="scss" scoped>
    .card {
        margin-bottom: 30px;
        cursor: pointer;
        transition: 0.2s;

        img {
            height: 150px;
        }

        &:hover {
            border-color: #bdc3c7;
        }

        .btn-buy {
            width: 50%;
            border: 1px #212529 solid;
            border-radius: 0;
            color: #212529;
            outline: none;
            box-shadow: none;

            &:hover {
                border-color: #252525;
                color: #252525;
            }

            &:active {
                background-color: #252525;
                color: #f0f0f0
            }
        }

        .description {
            height: 150px;
            padding: 10px 5px;
        }
    }
</style>
