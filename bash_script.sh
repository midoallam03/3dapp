CURRENT_DIR='.'

get_recent_file () {
    FILE=$(ls -Art1 ${CURRENT_DIR} | tail -n 1)
    if [ ! -f ${FILE} ]; then
        CURRENT_DIR="${CURRENT_DIR}/${FILE}"
        get_recent_file
    fi
    echo $FILE
    exit
}
get_recent_file
