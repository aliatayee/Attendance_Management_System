

/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: table editable Init
 */

(function ($) {

    var datatable = $('.table-editable').dataTable({
            "columns": [
            { "name": "id" },
            { "name": "age" },
            { "name": "qty" },
            { "name": "cost" },
            ],
            "bPaginate": false,
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                var setCell = function(response, newValue) {
                var table = new $.fn.dataTable.Api('.table');
                var cell = table.cell('td.focus');
                var cellData = cell.data();
                
                var div = document.createElement('div');
                div.innerHTML = cellData;
                var a = div.childNodes;
                a.innerHTML = newValue;
                
                console.log('jml a new ' + div.innerHTML);
                cell.data(div.innerHTML);
                highlightCell($(cell.node()));
                
                // This is huge cheese, but the a has lost it's editable nature.  Do it again.
                $('td.focus a').editable({ 
                    'mode': 'inline',
                    'success' : setCell
                    });
                };
                $('.editable').editable(
                { 
                    'mode': 'inline',
                    'success' : setCell
                }
                );
            },
            "autoFill" : {
                "columns" : [1, 2]
            },
            "keys" : true
        });
        
    addCellChangeHandler();
    addAutoFillHandler();
        
    function highlightCell($cell) {
        var originalValue = $cell.attr('data-original-value');
        if (!originalValue) {
            return;
        }
        var actualValue = $cell.text();
        if (!isNaN(originalValue)) {
            originalValue = parseFloat(originalValue);
        }
        if (!isNaN(actualValue)) {
            actualValue = parseFloat(actualValue);
        }
        if ( originalValue === actualValue ) {
            $cell.removeClass('cat-cell-modified').addClass('cat-cell-original');
        } else {
            $cell.removeClass('cat-cell-original').addClass('cat-cell-modified');
        }
    }

    function addCellChangeHandler() {
        $('a[data-pk]').on('hidden', function (e, editable) {
            var $a = $(this);
            var $cell = $a.parent('td');
            highlightCell($cell);
        });
    }

    function addAutoFillHandler() {
        var table = $('.table').DataTable();
        table.on('autoFill', function (e, datatable, cells) {
            var datatableCellApis = $.each(cells, function(index, row) {
                var datatableCellApi = row[0].cell;
                var $jQueryObject = $(datatableCellApi.node());
                highlightCell($jQueryObject);
            });
        });
    }

})(jQuery);