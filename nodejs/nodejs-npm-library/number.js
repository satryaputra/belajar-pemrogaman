export const min = (first, last) => {
    if (first > last) {
        return last;
    } else {
        return first;
    }
}

export const max = (first, last) => {
    if (first > last) {
        return first;
    } else {
        return last;
    }
}