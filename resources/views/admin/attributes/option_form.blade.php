<div class="bg-white bd rounded-sm border border-slate-200 rc h-80">
        <div class="flex ak zc qv">

            <!-- Panel -->
            <div class="uw">
            @if (!empty($attributeOption))
            {!! Form::model($attributeOption, ['url' => ['admin/attributes/options', $attributeOption->id], 'method' => 'PUT']) !!}
            {!! Form::hidden('id') !!}
        @else
            {!! Form::open(['url' => ['admin/attributes/options', $attribute->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @endif
        {!! Form::hidden('attribute_id', $attribute->id) !!}
                <!-- Panel body -->
                <div class="d_ fd">

                    <!-- Business Profile -->
                    <section>
                        <h3 class="gf gb text-slate-800 font-bold rt">Add option</h3>
                        <!-- <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div> -->

                        <div class="je jc fg jm jb rw">
                        {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                           
                        </div>

                    </section>

                    
                </div>

                <!-- Panel footer -->
                <footer>
                    <div class="flex ak vm vg co border-slate-200">
                        <div class="flex ls">
                            <button class="btn ho xi ye ml-3" type="submit" >Submit</button>
                        </div>
                    </div>
                </footer>
                {!! Form::close() !!}
            </div>

        </div>
    </div>