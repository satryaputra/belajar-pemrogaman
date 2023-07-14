test("array simple", () => {
    const names = ["Putra", "Budi", "Eko"];
    expect(names).toContain("Putra");
});

test("array object", () => {
    const person = [
        {
            name: "Putra"
        },
        {
            name: "Budi"
        }
    ]

    expect(person).toContainEqual({name: "Budi"});
});