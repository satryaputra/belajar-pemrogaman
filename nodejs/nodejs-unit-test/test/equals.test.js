test("test toBe", () => {
    let name = "Putra";
    let hello = `Hello ${name}`;

    expect(hello).toBe("Hello Putra");
})

test("test toEqual", () => {
    let person = {name: "Putra"};
    Object.assign(person, {gender: "Male"});

    expect(person).toEqual({name: "Putra", gender: "Male"});
})