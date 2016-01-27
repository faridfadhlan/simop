    {{ Form::hidden('_token', $value=csrf_token()) }}
    <div class="form-group{{ $errors->has('nama')?' has-error':'' }}">
        {{ Form::label('nama', 'Nama Kegiatan', array('class' => 'col-lg-3 control-label')) }}
        <div class="col-lg-8">
            {{ Form::text('nama', $value=$kegiatan->nama, $attributes=array('class' => 'form-control', 'placeholder'=>'Nama Kegiatan...')) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('jenis_waktu_id')?' has-error':'' }}">
        {{ Form::label('jenis_waktu_id', 'Jenis Waktu Kegiatan', array('class' => 'col-lg-3 control-label')) }}
        <div class="col-lg-8">
            {{ Form::select('jenis_waktu_id', $jenis_waktu, $kegiatan->jenis_waktu_id, ['placeholder' => 'Pilih Jenis Waktu', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('nilai_waktu')?' has-error':'' }}">
        {{ Form::label('nilai_waktu', 'Waktu Kegiatan', array('class' => 'col-lg-3 control-label')) }}
        <div class="col-lg-8">
            {{ Form::text('nilai_waktu', $value=$kegiatan->nilai_waktu, $attributes=array('class' => 'form-control', 'placeholder'=>'Waktu Kegiatan...')) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('tahun')?' has-error':'' }}">
        {{ Form::label('tahun', 'Tahun Kegiatan', array('class' => 'col-lg-3 control-label')) }}
        <div class="col-lg-8">
            {{ Form::text('tahun', $value=$kegiatan->tahun, $attributes=array('class' => 'form-control', 'placeholder'=>'Tahun Kegiatan...')) }}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3"></label>
        <div class="col-lg-2">
            <button type="submit" class="btn btn-info btn-gradient dark btn-block">Simpan</button>
        </div>
    </div>