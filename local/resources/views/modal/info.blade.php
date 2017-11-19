<!-- Modal -->
<div class="modal fade" style="width:80%; padding-top: 5%;" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:170%;">
            <div class="col-auto modal-header">
                <span aria-hidden="true">Информация о бутике</span>
            </div>
            <div class="row ml-0 pb-5">
            <div class="col-auto modal-body">
                {{$boutic->info}}
            </div>
            </div>
            <div class="row ml-0">
                <div class="col">
                   Дата заключения контракта:
                    <br>
                    21.11.2017
                </div>
                <div class="col">
                    Дата истечения контракта:
                    <br>
                    21.05.2018
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>