function PlayBGM() {// �ΏۂƂȂ�ID��
    var id = 'BGM';

    // ����ȊO�������特���t�@�C���������߂�
    if (typeof (document.getElementById(id).currentTime) != 'undefined') {
        document.getElementById(id).currentTime = 0;
    }
    // [ID:sound-file]�̉����t�@�C�����Đ�[play()]����
    document.getElementById(id).play();
}
function StopBGM()
{
    var BGM = document.getElementById('BGM');

    BGM.pause();
    bgm.currentTime = 0;
}
