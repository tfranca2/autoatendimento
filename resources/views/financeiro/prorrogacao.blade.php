@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 text-center" style="position: relative; color: #49bf9c;">
<br>
<h3>Prorrogação Vencimento - Boletos</h3>
<table class="table" style="line-height: 3;">
    <thead style="color: #49bf9c;">
        <tr>
            <th>Vencimento Atual</th>
            <th>Valor Atualizado</th>
            <th>Nova Data</th>
        </tr>
    </thead>
    <tbody>
        <tr data-id="1" data-vencimentooriginal="2021-09-16" data-valor="3110.00">
            <td>{{ date('d/m/Y', strtotime('2021-09-16')) }}</td>
            <td>R$ {{ formatDecimalToView(3110.00) }}</td>
            <td></td>
        </tr>
        <tr data-id="2" data-vencimentooriginal="2021-10-15" data-valor="3010.00">
            <td>{{ date('d/m/Y', strtotime('2021-10-15')) }}</td>
            <td>R$ {{ formatDecimalToView(3010.00) }}</td>
            <td></td>
        </tr>
        <tr data-id="3" data-vencimentooriginal="2021-11-20" data-valor="3010.00">
            <td>{{ date('d/m/Y', strtotime('2021-11-20')) }}</td>
            <td>R$ {{ formatDecimalToView(3010.00) }}</td>
            <td></td>
        </tr>
    </tbody>
</table>
<div style="position: absolute; bottom: 20px; left: 20px;">
    <a href="#" id="prorrogar" class="btn btn-lg btn-success">PRORROGAR</a>
</div>
<div style="position: absolute; bottom: 20px; right: 30px;">
    <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="dateModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selecione a nova data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="#" id="plus" class="btn btn-primary btn-block btn-lg"><i class="fa fa-plus"></i></a>
        <div id="data" class="text-center" style="font-size: 42pt;"><span id="dia"></span> / <span id="mes"></span> / <span id="ano"></span></div>
        <a href="#" id="minus" class="btn btn-primary btn-block btn-lg"><i class="fa fa-minus"></i></a>
      </div>
      <div class="modal-footer">
        <button id="setDate" type="button" class="btn btn-primary">ok</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        oneMinuteToReturnFor('financeiro');

        var mesesde31 = [ 1, 3, 5, 7, 8, 10, 12 ];
        var mesesde30 = [ 4, 6, 9, 11 ];

        var amanha = '<?php echo date("Y-m-d"); ?>';
        var vencimentooriginal = '0-0-0';
        var dia = 0;
        var mes = 0;
        var ano = 0;
        var id = 0;

        $('#prorrogar').click(function(e){
            e.preventDefault();
            if( $('tr[data-vencimentonovo]').length == 0 ){
                toastr.error('Selecione um boleto para prorrogar');
                return;
            } else {
                window.location.href = 'prorrogar';
            }
        });

        $('tr').click(function(e) {

            if( $('tr[data-vencimentonovo]').length > 0 ){
                toastr.error('Boleto com data já selecionada para prorrogação','');
                return;
            }

            id = $(this).data('id');

            vencimentooriginal = amanha;
            if( 
                parseInt($(this).data('vencimentooriginal').split('-')[2]) >= parseInt(amanha.split('-')[2]) &&
                parseInt($(this).data('vencimentooriginal').split('-')[1]) >= parseInt(amanha.split('-')[1]) &&
                parseInt($(this).data('vencimentooriginal').split('-')[0]) >= parseInt(amanha.split('-')[0]) 
            )
                vencimentooriginal = $(this).data('vencimentooriginal');

            $('#dateModal').modal('show');

            dia = parseInt(vencimentooriginal.split('-')[2]);
            mes = parseInt(vencimentooriginal.split('-')[1]);
            ano = parseInt(vencimentooriginal.split('-')[0]);

            $('#dia').html(dia);
            $('#mes').html(mes);
            $('#ano').html(ano);

        });

        $('#setDate').click(function(e) {
            $('tr[data-id='+ id +']').attr('data-vencimentonovo', ano +'-'+ mes +'-'+ dia );
            $('tr[data-id='+ id +'] td').last().html( dia +'/'+ mes +'/'+ ano );
            $('#dateModal').modal('hide');
        });

        $('#plus').click(function(e) {
            dia++;
            if( dia > 30 && mesesde30.includes(mes) )
                upMonth();
            else if( dia > 31 && mesesde31.includes(mes) )
                upMonth();
            else {
                if( ( ano % 4 == 0 ) && ( (ano % 100 != 0) || (ano % 400 == 0) ) ){
                    // bisexto
                    if( dia > 29 && mes == 2 )
                        upMonth();
                } else {
                    if( dia > 28 && mes == 2  )
                        upMonth();
                }  
            }
            $('#dia').html(dia);
        });

        $('#minus').click(function(e) {
            dia--;

            if(
                dia < parseInt(amanha.split('-')[2]) &&
                mes == parseInt(amanha.split('-')[1]) &&
                ano == parseInt(amanha.split('-')[0]) 
            )
                $('#plus').click();

            if( dia < 1 )
                downMonth();
            $('#dia').html(dia);
        });

        function upMonth() {
            dia = 1;
            mes++;
            if( mes > 12 ){
                mes = 1;
                ano++;
                $('#ano').html(ano);
            }
            $('#mes').html(mes);
            $('#dia').html(dia);

            return;
        }

        function downMonth() {
            mes--;
            if( mes < 1 ){
                mes = 12;
                ano--;
                $('#ano').html(ano);
            }

            if( mesesde30.includes(mes) )
                dia = 30;
            else if( mesesde31.includes(mes) )
                dia = 31;
            else {
                if( ( ano % 4 == 0 ) && ( (ano % 100 != 0) || (ano % 400 == 0) ) ){
                    // bisexto
                    dia = 29;
                } else {
                    dia = 28;
                }  
            }

            $('#mes').html(mes);
            $('#dia').html(dia);

            return;
        }

    });
</script>
@endsection
