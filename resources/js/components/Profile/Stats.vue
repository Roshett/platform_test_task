<template>
    <div class="card">
        <div class="stats">
            <h3>1</h3>
            <span>Gifts</span>
        </div>
        <div class="stats">
            <h3 class="active">478</h3>
            <span>Hours</span>
        </div>
        <div class="stats">
            <h3>31</h3>
            <span>Games</span>
        </div>
        <div class="stats">
            <h3>0</h3>
            <span>Groups</span>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .card {
        cursor: default;
        display: flex;
        flex-direction: row;
        text-align: center;
        .stats {
            width: 25%;
            margin: 10px 0;
            h3 {
                font-size: 36px;
            }

            span {
                color: gray;
            }

        }

        & > *:not(:last-child) {
                border-right: 1px solid rgba(0, 0, 0, 0.125);
        }

        .active {
            background: linear-gradient(#bb33ff, #3c33ff, #242424);  /* подробнее про градиенты */
            -webkit-background-clip: text;  /* подробнее про background-clip */
            color: transparent
        }
    }
</style>
