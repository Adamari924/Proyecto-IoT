<div class="row g-2">
  <div class="col-12 col-md-6 col-lg-4">
  <div class="card text-center">
      <div class="card-header">
          Temperatura
      </div>
      <div class="card-body" style="width:100%; min-height:220px">
          <div id="Temperatura" class="gauge"></div>
      </div>
      <div class="card-footer text-body-secondary">
        Ultimo Registro:<div id="date_temperatura">Fecha/Hora</div>
      </div>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4">
  <div class="card text-center">
      <div class="card-header">
          Humedad
      </div>
      <div class="card-body" style="width:100%;">
          <div id="Humedad" class="gauge"></div>
      </div>
      <div class="card-footer text-body-secondary">
        Ultimo Registro:<div id="date_humedad">Fecha/Hora</div>
      </div>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4">
  <div class="card text-center">
      <div class="card-header">
          Calidad del Aire
      </div>
      <div class="card-body" style="width:100%;">
          <div id="CalidadAire" class="gauge"></div>
      </div>
      <div class="card-footer text-body-secondary">
        Ultimo Registro:<div id="date_indice">Fecha/Hora</div>
      </div>
  </div>
  </div>

  <div class="col-12 col-md-10 offset-md-1 offset-lg-0 col-lg-6">
      <div class="card text-center ">
          <div class="card-header">
            Gráfica de Barras
          </div>
          <div class="card-body" style="width:100%;">
              <div id="bar"></div>
    </div>
    <div class="card-footer text-body-secondary">
        Ultimo registro:
      </div>
      </div>
  </div>
  <div class="col-12 col-md-10 offset-md-1 offset-lg-0 col-lg-6">
  <div class="card text-center">
      <div class="card-header">
          Gráfica de Lineas
      </div>
      <div class="card-body" style="width:100%;">
          <div id="line"></div>
      </div>
      <div class="card-footer text-body-secondary">
          Historial de registros
      </div>
  </div>
  </div>
</div>
Con los siguientes scripts se generaran las gráficas.

<script src="/assets/js/echarts/echarts.js" type="text/javascript"></script>
<script src="/assets/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    var barChart = echarts.init(document.getElementById('bar'));
    var lineChart = echarts.init(document.getElementById('line'));
    var TemperaturaChart = echarts.init(document.getElementById('Temperatura'));
    var HumedadChart = echarts.init(document.getElementById('Humedad'));
    var CalidadAireChart = echarts.init(document.getElementById('CalidadAire'));

TemperaturaChart.setOption({
  series: [
    {
      name: 'gauge_temperatura',
      type: 'gauge',
      center: ['50%', '65%'],
      startAngle: 200,
      endAngle: -20,
      min: 0,
      max: 60,
      splitNumber: 12,
      itemStyle: {
        color: '#FFAB91'
      },
      progress: {
        show: true,
        width: 30
      },
      pointer: {
        show: false
      },
      axisLine: {
        lineStyle: {
          width: 30
        }
      },
      axisTick: {
        distance: -45,
        splitNumber: 5,
        lineStyle: {
          width: 2,
          color: '#999'
        }
      },
      splitLine: {
        distance: -52,
        length: 14,
        lineStyle: {
          width: 3,
          color: '#999'
        }
      },
      axisLabel: {
        distance: -20,
        color: '#999',
        fontSize: 16
      },
      anchor: {
        show: false
      },
      title: {
        show: false
      },
      detail: {
        valueAnimation: true,
        width: '60%',
        lineHeight: 40,
        borderRadius: 8,
        offsetCenter: [0, '50%'],
        fontSize: 32,
        fontWeight: 'bolder',
        formatter: '{value} °C',
        color: 'inherit'
      },
      data: [
        {
          value: 20
        }
      ]
    }]
    });

HumedadChart.setOption({
  series: [
    {
      name: 'gauge_humedad',
      type: 'gauge',
      center: ['50%', '65%'],
      startAngle: 200,
      endAngle: -20,
      min: 0,
      max: 100,
      splitNumber: 10,
      itemStyle: {
        color: '#91E5FF'
      },
      progress: {
        show: true,
        width: 30
      },
      pointer: {
        show: false
      },
      axisLine: {
        lineStyle: {
          width: 30
        }
      },
      axisTick: {
        distance: -45,
        splitNumber: 5,
        lineStyle: {
          width: 2,
          color: '#999'
        }
      },
      splitLine: {
        distance: -52,
        length: 14,
        lineStyle: {
          width: 3,
          color: '#999'
        }
      },
      axisLabel: {
        distance: -20,
        color: '#999',
        fontSize: 16
      },
      anchor: {
        show: false
      },
      title: {
        show: false
      },
      detail: {
        valueAnimation: true,
        width: '60%',
        lineHeight: 40,
        borderRadius: 8,
        offsetCenter: [0, '50%'],
        fontSize: 32,
        fontWeight: 'bolder',
        formatter: '{value} %',
        color: 'inherit'
      },
      data: [
        {
          value: 20
        }
      ]
    }]
    });

CalidadAireChart.setOption({
  series: [
    {
      name: 'gauge_indice',
      type: 'gauge',
      center: ['50%', '65%'],
      startAngle: 200,
      endAngle: -20,
      min: 0,
      max: 60,
      splitNumber: 12,
      itemStyle: {
        color: '#ffe291'
      },
      progress: {
        show: true,
        width: 30
      },
      pointer: {
        show: false
      },
      axisLine: {
        lineStyle: {
          width: 30
        }
      },
      axisTick: {
        distance: -45,
        splitNumber: 5,
        lineStyle: {
          width: 2,
          color: '#999'
        }
      },
      splitLine: {
        distance: -52,
        length: 14,
        lineStyle: {
          width: 3,
          color: '#999'
        }
      },
      axisLabel: {
        distance: -20,
        color: '#999',
        fontSize: 16
      },
      anchor: {
        show: false
      },
      title: {
        show: false
      },
      detail: {
        valueAnimation: true,
        width: '60%',
        lineHeight: 40,
        borderRadius: 8,
        offsetCenter: [0, '50%'],
        fontSize: 32,
        fontWeight: 'bolder',
        formatter: '{value} °C',
        color: 'inherit'
      },
      data: [
        {
          value: 20
        }
      ]
    }]
});

  barChart.setOption({
    tooltip: {},
    legend: {
      data: ['Medidas']
    },
    xAxis: {
      data: ['temperatura','humedad','CalidadAire']
    },
    yAxis: {},
    series: [
      {
        name: 'Medidas',
        type: 'bar',
        data: [0,0,0]
      }
    ]
  });


  lineChart.setOption({
    tooltip: {},
    legend: {
      data: ['Temperatura','Humedad','CalidadAire']
    },
    xAxis: {
      data: []
    },
    yAxis: {},
    series: [
      {
          name: 'Temperatura',
          data: [],
          type: 'line',
          stack: 'x'
      },
      {
          name: 'Humedad',
          data: [],
          type: 'line',
          stack: 'x'
      },
      {
          name: 'CalidadAire',
          data: [],
          type: 'line',
          stack: 'x'
      }
    ]
  });

  function fetch() {
    $.ajax({
        url:"/datos1",
        type:"GET",
        dataType:"json",
        success:function(data){ 
            console.log(data);
            temperaturaChart.setOption({
                series: [{data: [{value: data.Temperatura}]}]
            });
            humedadChart.setOption({
                series: [{data: [{value: data.Humedad}]}]
            });
            CalidadAireChart.setOption({
                series: [{data: [{value: data.CalidadAire}]}]
            });
            TemperaturaDate.innerHTML = data.fecha;
    			    HumedadDate.innerHTML = data.fecha;
    			    CalidadAireDate.innerHTML = data.fecha;
        }
      });

    $.ajax({
        url:"/datos3",
        type:"GET",
        dataType:"json",
        success:function(data){ 
            console.log(data);
            barChart.setOption({
            xAxis: {
            data: data.categories
            },
            series: [{
              name: 'Medidas',
              data: data.data
            }]
          });
        }
      });

  $.ajax({
      url:"/dato4",
      type:"GET",
      dataType:"json",
      success:function(data){ 
          console.log(data);
          lineChart.setOption({
          notMerge :true,
          yAxis: {
            data: data.columnas
            },
            series: [{
              name: 'Temperatura',
              data: data.temperatura
            },{
              name: 'Humedad',
              data: data.humedad
            },{
              name: 'CalidadAire',
              data: data.CalidadAire
            }]
        });
      }
    });
  }
  $(document).ready(function(){
  fetch(); 
      window.addEventListener('resize', function() {
        barChart.resize();
        lineChart.resize();
        TemperaturaChart.resize();
        HumedadChart.resize();
        CalidadAireChart.resize();
      });

    setInterval(fetch, 15000);
  });
</script>