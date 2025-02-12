<script setup lang="ts">

</script>

<template>
  <div class="finance-dashboard sales-dashboard">
    <!--Header-->
    <div class="dashboard-header">
      <VAvatar
        size="large"
        picture="/images/avatars/svg/vuero-1.svg"
      />

      <div class="start">
        <h3 class="dark-inverted">
          Seja Bem vindo, Renato
        </h3>
        <p>Acompanhe no painel como estão suas Vendas!</p>
      </div>
      <div class="end">
        <VButton
          dark="3"
          to="produtos"
        >
          Produtos
        </VButton>
        <VButton
          color="primary"
          elevated
          to="/vendas"
        >
          Vendas
        </VButton>
      </div>
    </div>
  </div>

  <ProdutosList />
  <!-- Loader -->
  <!-- <div v-show="isLoading" class="overlay">
    <VPlaceload
      height="3vh"
      width="100%"
      class="mx-auto "
    />
  </div> -->

  <!-- Conteúdo exibido após o carregamento -->
  <!-- <div v-show="!isLoading">
    <div>
      <CardsAdmin
        :total-usuarios="totalUsuarios"
        :total-registros="totalRegistros"
        :total-vendas="totalVendas"
      />
    </div>

    <div class="mt-4">
      <ListUsers :usuario-vendas-resumo="usuarioResumoList" />
    </div>
  </div> -->
</template>

<style lang="scss" scoped>
@import '/@src/scss/abstracts/all';
.sales-dashboard {
  .dashboard-header {
    display: flex;
    align-items: center;
    font-family: var(--font);
    margin-bottom: 30px;

    .start {
      margin-inline-start: 12px;

      h3 {
        font-family: var(--font-alt);
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--dark-text);
      }
    }

    .end {
      margin-inline-start: auto;
      display: flex;
      justify-content: flex-end;

      .button {
        margin-inline-start: 10px;
      }
    }
  }
}
.dashboard-card {
    @include vuero-s-card;

    &:not(:last-child) {
      margin-bottom: 1.5rem;
    }

    &.flex-chart {
      height: calc(50% - 0.75rem);
    }

    .card-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;

      h3 {
        font-family: var(--font-alt);
        font-size: 1rem;
        font-weight: 600;
        color: var(--dark-text);
      }
    }
    .radial-wrap {
      display: flex;
      flex-direction: column;
      height: calc(100% - 44px);

      .radial-stats {
        margin-top: auto;
        display: flex;
        padding-top: 20px;
        border-top: 1px solid var(--fade-grey-dark-3);

        .radial-stat {
          width: 50%;
          text-align: center;

          &:first-child {
            border-inline-end: 1px solid var(--fade-grey-dark-3);
          }

          span {
            display: block;

            &:first-child {
              color: var(--light-text);
              font-size: 0.9rem;
            }

            &:nth-child(2) {
              color: var(--dark-text);
              font-size: 1.3rem;
              font-weight: 600;
            }
          }
        }
      }
    }
    .revenue-stats {
      display: flex;
      margin-bottom: 10px;

      .revenue-stat {
        margin-inline-end: 30px;
        font-family: var(--font);

        span {
          display: block;

          &:first-child {
            color: var(--light-text);
            font-size: 0.9rem;
          }

          &:nth-child(2) {
            color: var(--dark-text);
            font-size: 1.2rem;
            font-weight: 600;
          }

          &.current {
            color: var(--primary);
          }
        }
      }
    }

    .chart-media {
      display: flex;
      align-items: center;
      justify-content: space-between;

      .meta {
        margin-inline-end: 30px;
        align-items: center;
        font-family: var(--font);

        h4 {
          font-family: var(--font-alt);
          font-size: 1rem;
          font-weight: 600;
          color: var(--dark-text);
        }

        span {
          display: block;
          color: var(--dark-text);
          font-size: 1.2rem;
          font-weight: 600;
          margin-bottom: 8px;
        }

        p {
          font-size: 0.9rem;
        }
      }

      .chart-container {
        min-width: 110px;
        flex-shrink: 0;
        max-width: 120px;
      }
    }

    .chart-group {
      display: flex;

      .group {
        text-align: center;
        width: 33.3%;

        .chart-container {
          margin-top: -5px;
        }

        span {
          display: block;
          margin-top: -25px;
          font-family: var(--font);
          color: var(--dark-text);
          font-weight: 600;
          font-size: 1.2rem;
        }

        p {
          font-size: 0.9rem;
        }
      }
    }
  }

.analytics-dashboard {
  .text-h-green {
    color: var(--green);
  }

  .text-h-red {
    color: var(--red);
  }

  .text-widget {
    color: var(--widget-grey);
  }

  .dashboard-tile {
    @include vuero-s-card;
    font-family: var(--font);

    .tile-head {
      display: flex;
      align-items: center;
      justify-content: space-between;

      h3 {
        font-family: var(--font-alt);
        color: var(--dark-text);
        font-weight: 600;
      }
    }

    .tile-body {
      font-size: 2rem;
      padding: 4px 0 8px;

      span {
        color: var(--dark-text);
        font-weight: 600;
      }
    }

    .tile-foot {
      span {
        &:first-child {
          font-weight: 500;

          svg {
            height: 16px;
            width: 16px;
            margin-inline-end: 6px;
            stroke-width: 3px;
          }
        }

        &:nth-child(2) {
          color: var(--light-text);
          font-size: 0.9rem;
        }
      }
    }
  }
}
@media only screen and (width <= 767px) {
  .sales-dashboard {
    .dashboard-header {
      text-align: center;
      flex-direction: column;

      .start {
        margin: 10px auto;
      }

      .end {
        margin: 0;
        justify-content: space-between;
      }
    }
  }
}

</style>
